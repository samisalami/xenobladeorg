<?php
namespace App\Controller;
use App\Entity\XenobladeChapters;
use App\Entity\XenobladeItemmerchantR;
use App\Entity\XenobladeMerchantMapPoints;
use App\Entity\XenobladeMerchants;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MerchantsController extends AbstractController
{
    public function index()
    {
        $merchantViewData = [];
        $chapters = $this->getDoctrine()->getRepository(XenobladeChapters::class)->findBy([], [
            'prio' => 'ASC'
        ]);

        foreach ($chapters as $chapter) {
            $merchants = $this->getDoctrine()->getRepository(XenobladeMerchants::class)->findBy([
                'chapter' => $chapter
            ]);

            $merchantData = [];
            foreach ($merchants as $merchant) {
                $mapPoints = $this->getDoctrine()->getRepository(XenobladeMerchantMapPoints::class)->findBy([
                    'merchant' => $merchant
                ]);
                $itemRelations = $this->getDoctrine()->getRepository(XenobladeItemmerchantR::class)->findBy([
                    'merchant' => $merchant
                ]);

                $groupedItems = [];
                foreach ($itemRelations as $relation) {
                    /** @var XenobladeItemmerchantR $relation */
                    if (!$relation->getItem() && !$relation->getEquipSockettypeR()) {
                        continue;
                    }

                    $socket = null;
                    if ($relation->getItem()) {
                        $item = $relation->getItem();
                    } else {
                        $item = $relation->getEquipSockettypeR()->getItem();
                        $socket = $relation->getEquipSockettypeR()->getSockettype();
                    }
                    $category = $item->getItemcategory()->getName();

                    if (!isset($groupedItems[$category])) {
                        $groupedItems[$category] = [];
                    }
                    array_push($groupedItems[$category], [
                        'item' => $item,
                        'socket' => $socket
                    ]);
                }

                ksort($groupedItems);

                array_push($merchantData, [
                    'merchant' => $merchant,
                    'mapPoint' => $mapPoints ? $mapPoints[0] : null,
                    'items' => $groupedItems
                ]);
            }

            if (count($merchantData) > 0) {
                array_push($merchantViewData, [
                    'chapter' => $chapter,
                    'merchantData' => $merchantData
                ]);
            }
        }

        return $this->render('/items/merchants.html.twig', [
            'merchantViewData' => $merchantViewData
        ]);
    }
}
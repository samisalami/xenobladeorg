<?php
namespace App\Controller;

use App\Entity\XenobladeCollectioncollectionfieldtypesR;
use App\Entity\XenobladeCollectionfieldtypes;
use App\Entity\XenobladeCollectionItems;
use App\Entity\XenobladeCollections;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CollectionsController extends AbstractController
{

    public function index()
    {
        $collections = $this->getDoctrine()->getRepository(XenobladeCollections::class)->findAll();

        $groupedCollections = [];
        foreach ($collections as $collection)
        {
            /** @var XenobladeCollections $collection */
            $rows = [];
            $rows = array_merge($rows, $this->getCollectionRow($collection, $collection->getField1CollectionType()));
            $rows = array_merge($rows, $this->getCollectionRow($collection, $collection->getField2CollectionType()));
            $rows = array_merge($rows, $this->getCollectionRow($collection, $collection->getField3CollectionType()));
            $rows = array_merge($rows, $this->getCollectionRow($collection, $collection->getField4CollectionType()));
            $rows = array_merge($rows, $this->getCollectionRow($collection, $collection->getField5CollectionType()));
            $rows = array_merge($rows, $this->getCollectionRow($collection, $collection->getField6CollectionType()));
            $groupedCollections[$collection->getChapter()->getName()]['rows'] = $rows;
            $groupedCollections[$collection->getChapter()->getName()]['collection'] = $collection;
        }

        return $this->render("items/collections.html.twig", [
            'groupedCollections' => $groupedCollections
        ]);
    }

    private function getCollectionRow($collection, $fieldType)
    {
        /** @var XenobladeCollectionfieldtypes $fieldType */
        $row = [];
        if (!$fieldType)
        {
            return $row;
        }

        $row[$fieldType->getName()]['collectionItems'] = $this->getDoctrine()->getRepository(XenobladeCollectionItems::class)->findBy(
            [
                'collectionFieldType' => $fieldType,
                'collection' => $collection
            ]
        );
        $row[$fieldType->getName()]['rewardRelation'] = $this->getDoctrine()->getRepository(XenobladeCollectioncollectionfieldtypesR::class)->findBy(
            [
                'collectionRow' => $fieldType,
                'collection' => $collection
            ]
        )[0];
        return $row;
    }
}

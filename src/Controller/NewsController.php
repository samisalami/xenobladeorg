<?php
namespace App\Controller;
use App\Entity\News;
use Symfony\Component\Finder\Finder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpKernel\Kernel;
// use SplFileInfo;

// This controller renders the files in 'public/news'

class NewsController extends AbstractController
{
    public function news()
    {
        // TODO: use CacheableSupportsMethodInterface
        // TODO: seperate page for every news

        return $this->render('news.html.twig', [
            'newsList' => $this->getNewsList($this)
        ]);
    }

    public function getNewsList($that)
    {
        $projectPath = $that->getParameter('kernel.project_dir');

        //$projectPath = Kernel::getProjectDir();

        $finder = new Finder();
        $finder->files()->name('*.xml')->in($projectPath.'/src/News');

        $encoders = [new XmlEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $newsList = [];

        $twig = $that->get('twig');

        // check if there are any search results
        if ($finder->hasResults()) {
            foreach ($finder as $fileInfo) {
                $absoluteFilePath = $fileInfo->getRealPath();
                $fileNameWithExtension = $fileInfo->getRelativePathname();

                $news = $serializer->deserialize($fileInfo->getContents(),
                                                 News::class, 'xml');

                // pre-render news to render twig tags contained in news markup
                $news->setContent($twig
                           ->createTemplate($news->getContent())
                           ->render());

                array_push($newsList, $news);
            }
        }

        return $newsList;
    }
}

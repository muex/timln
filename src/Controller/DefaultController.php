<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(ChartBuilderInterface $chartBuilder): Response
    {
        $vacation = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $vacation->setData([
            'labels' => ['Resturlaub','Verbraucht'],
            'datasets' => [
                [
                'data' => [12, 18],
                'backgroundColor'=> ['#57FFD1', '#FF6384']
                ]
            ]
        ]);
        $vacation->setOptions([/* ... */]);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'vacation' => $vacation
        ]);
    }

    /**
     * @Route("/sick/", name="sick")
     */
    public function sick(ChartBuilderInterface $chartBuilder): Response
    {
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober','November', 'Dezember'],
            'datasets' => [
                [
                    'label' => 'Urlaubstage',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [2, 0, 5, 3, 4, 5, 5, 0, 0, 0, 0, 8],
                ]
            ]
        ]);
        $chart->setOptions([/* ... */]);

        return $this->render('default/sick.html.twig', [
            'controller_name' => 'DefaultController',
            'chart' => $chart,
        ]);
    }
}

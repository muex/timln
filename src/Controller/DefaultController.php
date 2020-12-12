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

    /**
     * @Route("/calendar/", name="calendar")
     */
    public function calendar(ChartBuilderInterface $chartBuilder): Response
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

        return $this->render('default/calendar.html.twig', [
            'controller_name' => 'DefaultController',
            'chart' => $chart,
        ]);
    }

    /**
     * @Route("/humanresources/", name="humanresources")
     */
    public function humanresources(ChartBuilderInterface $chartBuilder): Response
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

        return $this->render('default/humanresources.html.twig', [
            'controller_name' => 'DefaultController',
            'chart' => $chart,
        ]);
    }

    /**
     * @Route("/management/", name="management")
     */
    public function management(ChartBuilderInterface $chartBuilder): Response
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

        return $this->render('default/management.html.twig', [
            'controller_name' => 'DefaultController',
            'chart' => $chart,
        ]);
    }

    /**
     * @Route("/vacation/", name="vacation")
     */
    public function vacation(ChartBuilderInterface $chartBuilder): Response
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

        return $this->render('default/vacation.html.twig', [
            'controller_name' => 'DefaultController',
            'chart' => $chart,
        ]);
    }

    /**
     * @Route("/worktime/", name="worktime")
     */
    public function worktime(ChartBuilderInterface $chartBuilder): Response
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

        return $this->render('default/worktime.html.twig', [
            'controller_name' => 'DefaultController',
            'chart' => $chart,
        ]);
    }
}

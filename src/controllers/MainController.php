<?php
/**
 * main controller calss
 */
namespace Itb\Controller;



use Itb\Model\User;
use Itb\Model\Job;
use fpdf;
use Itb\Model\CV;
use Itb\Controller\DatabaseTableRepository;
use Itb\Controller\DatabaseTable;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
/**
 * Created in textpad
 * User:Andrew B00069517
 * Date: 15/04/2016
 * Time: 10:44
 *
 * controlls the main actions
 */

class MainController
{
    /**
     * direst to login page
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function loginAction(Request $request, Application $app)
    {
        $argsArray = [];
        $templateName = 'login';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * home page action
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function indexAction(Request $request, Application $app)
    {


        $argsArray = [];

        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * list action
     *
     * @param Request $request
     * @param Application $app
     * @return mixed
     */

    public function listAction(Request $request, Application $app)
    {

        session_start();
        $username = $_SESSION['username'];

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $cvrepository = new DatabaseTableRepository('CV', 'cvs');
        $cvs = $cvrepository->getCV($id);

        $argsArray = [
            'cvs' => $cvs,
            'username' => $username,
        ];


        $templateName = 'list';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * employer action
     * @param \Twig_Environment $twig
     */
    public function employerAction(\Twig_Environment $twig)
    {
        $dvdRepository = new DatabaseTableRepository('Stydent', 'students');
        $dvds = $dvdRepository->getAll();

        $argsArray = [
            'dvds' => $dvds,
        ];

        $template = 'emloyer';
        $htmlOutput = $twig->render($template . '.html.twig', $argsArray);
        print $htmlOutput;
    }

    /**
     * displays students
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function studentsAction(Request $request, Application $app)
    {
        session_start();
        $username = $_SESSION['username'];

        echo ('USER' . $username);

        $dvdRepository = new DatabaseTableRepository('Stydent', 'students');
        $dvds = $dvdRepository->getAll();

        $argsArray = [
            'dvds' => $dvds,
            'username' => $username,
        ];

        $templateName = 'students';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * used when employerwants to download a cv
     *
     * @param Request $request
     * @param Application $app
     * @param $id
     * @return mixed
     */
    public function cvdownloadAction(Request $request, Application $app ,$id)
    {
        $applicationrepository = new DatabaseTableRepository('JobApp', ' applicants');
        $cvs = $applicationrepository->getOneById($id);

        $argsArray = [
            'cvs' => $cvs,
            'id' => $id,

        ];


        $objtext = serialize($cvs);

         $first = $cvs[1];
       	 $surname = $cvs[2];
         $age = $cvs[3];
         $address = $cvs[4];
         $gender = $cvs[5];
         $experience = $cvs[6];
         $position = $cvs[7];
         $image = $cvs[8];


/**
*        $fp = fopen("$first'sCV.txt", "a+");
*        fwrite($fp, $first ."\t". $surname ."\t\n". $age. "\t".$gender . "\t". $address  . "\t". $experience . "\t" . $image . "\t" . $position . "\r\n");
*        fclose($fp);
*
*/

        require('fpdf.php');

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Name : ' .$first);
        $pdf->Cell(40,10,$surname);
        $pdf->Cell(40,10,'Age : ' . $age);
        $pdf->SetX(10);
        $pdf->SetY(10);
        $pdf->Cell(50,30,'Address : ' . $address);
        $pdf->SetX(15);
        $pdf->SetY(15);
        $pdf->Cell(40,10,'Gender : ' . $gender);
        $pdf->SetX(20);
        $pdf->SetY(20);
        $pdf->Cell(50,20,'Experience : ' . $experience);
        $pdf->SetX(15);
        $pdf->SetY(45);
        $pdf->Image('images/'. $image,30,50,-200);

        $filename="$first'sCV.pdf";
        $pdf->Output($filename,'F');



        $templateName = 'cvdownload';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }



}

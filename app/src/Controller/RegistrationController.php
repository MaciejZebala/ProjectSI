<?php
/**
 * Registration Controller.
 */
namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Service\RegistrationService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class RegistrationController
 */
class RegistrationController extends AbstractController
{
    /**
     * Registration service.
     *
     * @var \App\Service\RegistrationService
     */
    private $registrationService;

    /**
     * RegistrationController constructor.
     *
     * @param \App\Service\RegistrationService $registrationService Registration service
     */
    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }
    /**
     *
     * Register action
     *
     * @Route(
     *     "/register",
     *     name="user_register",
     *     methods={"GET", "POST"}
     *     )
     *
     * @param Request                      $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     *
     * @return Response
     */
    public function index(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home_page_index');
        }

        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setRoles(['ROLE_USER']);
            $this->registrationService->save($user);
            $this->addFlash('success', 'message.registered_successfully');

            return $this->redirectToRoute('app_login');
        }

        return $this->render(
            'registration/index.html.twig',
            ['form' => $form->createView(), ]
        );
    }
}

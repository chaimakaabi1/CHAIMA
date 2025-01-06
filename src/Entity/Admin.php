<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\DocBlock\Tags\Method;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Repository\AdminRepository;




/**
 * @method string getUserIdentifier()
 */
#[ORM\Table(name: "admin")]
#[ORM\Entity(repositoryClass: AdminRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]

class Admin implements UserInterface
{
    #[ORM\Column(type: "string",nullable: true)]
    private $resetToken;
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private $id;

    #[Assert\NotBlank(message: "Username is required")]
    #[Assert\Length(min: 4, max: 255, maxMessage: "Username cannot exceed {{ limit }} characters")]
    #[ORM\Column(type: "string", length: 255,unique: true)]
    private $username;

    #[Assert\NotBlank(message: "Password is required")]
    #[Assert\Length(min: 8, max: 255, maxMessage: "Password cannot exceed {{ limit }} characters")]
    #[Assert\Regex(
        pattern: "/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,}$/",
        message: "Password must contain at least one digit, one uppercase letter, one lowercase letter, and be at least 8 characters long"
    )]
    #[ORM\Column(type: "string", length: 255)]
    private $password;

    #[Assert\NotBlank(message: "Email is required")]
    #[Assert\Email(message: "Invalid email address")]
    #[ORM\Column(type: "string", length: 255,unique: true)]
    private $email;

    #[Assert\NotBlank(message: "First name is required")]
    #[Assert\Length(min: 3, max: 255, maxMessage: "First name cannot exceed {{ limit }} characters")]
    #[Assert\Regex(
        pattern: "/^[A-Za-z]+$/",
        message: "First name can only contain letters"
    )]
    #[ORM\Column(name: "firstName", type: "string", length: 255)]
    private $firstName;

    #[Assert\NotBlank(message: "Last name is required")]
    #[Assert\Length(min: 3, max: 255, maxMessage: "Last name cannot exceed {{ limit }} characters")]
    #[Assert\Regex(
        pattern: "/^[A-Za-z]+$/",
        message: "Last name can only contain letters"
    )]
    #[ORM\Column(name: "lastName", type: "string", length: 255)]
    private $lastName;

    #[Assert\NotBlank(message: "Date of birth is required")]
    // #[Assert\Callback()]
    #[ORM\Column(name: "dateOfBirth", type: "date")]
    private $dateOfBirth;

    #[Assert\NotBlank(message: "Gender is required")]
    #[ORM\Column(type: "string", length: 255)]
    private $gender;

    #[Assert\NotBlank(message: "Address is required")]
    #[Assert\Length(min: 4, max: 255, maxMessage: "Last name cannot exceed {{ limit }} characters")]
    #[ORM\Column(type: "string", length: 255)]
    private $address;

    #[Assert\NotBlank(message: "phoneNumber is required")]
    #[Assert\Length(min: 8, max: 8, maxMessage: "Phone number cannot exceed {{ limit }} characters")]
    #[Assert\Regex(
        pattern: "/^\d+$/",
        message: "Phone number can only contain numbers"
    )]
    #[ORM\Column(name: "phoneNumber", type: "string", length: 255, unique: true)]
    private $phoneNumber;


    #[Assert\Length(max: 255, maxMessage: "Profile picture path cannot exceed {{ limit }} characters")]
    #[ORM\Column(name: "profilePicture", type: "string", length: 255)]
    private $profilePicture;

    #[Assert\NotBlank(message: "User type is required")]
    #[ORM\Column(type: "string", length: 255)]
    private $userType;

    #[Assert\NotBlank(message: "Registration date is required")]
    #[ORM\Column(name: "registrationDate", type: "date")]
    private $registrationDate;

    #[ORM\Column(type: "boolean")]
    private $isActive;

   #[ORM\Column(type: 'boolean')]
    private $isVerified;

    /**
     * @return mixed
     */
    public function getVerificationCode()
    {
        return $this->verificationCode;
    }

    /**
     * @param mixed $verificationCode
     */
    public function setVerificationCode($verificationCode): void
    {
        $this->verificationCode = $verificationCode;
    }

    #[ORM\Column(type: 'string')]
    private $verificationCode;

    #[Route("/test", name: "app_test")]
    public function testAction()
    {
        // Your test action logic here
    }
    public function __construct()
    {
        $this->userType = 'admin'; // Set the user type to 'admin'
        $this->isActive = true; // Set isActive to true by default
        $this->registrationDate = new \DateTime();
        $this->isVerified = false;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture): void
    {
        $this->profilePicture = $profilePicture;
    }

    public function getUserType(): string
    {
        return $this->userType;
    }

    public function setUserType(string $userType): void
    {
        $this->userType = $userType;
    }

    public function getRegistrationDate(): \DateTime
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(\DateTime $registrationDate): void
    {
        $this->registrationDate = $registrationDate;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @Assert\Callback(callback={"validateAge"})
     */
    public function validateAge(ExecutionContextInterface $context, $payload)
    {
        // Calculate the age based on the date of birth
        $now = new \DateTime();
        if($this->dateOfBirth){
            $age = $now->diff($this->dateOfBirth)->y;

            if ($age < 10) {
                $context->buildViolation('You must be at least 10 years old to register.')
                    ->atPath('dateOfBirth')
                    ->addViolation();
            }
        }
        else {

        }}


    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function isIsVerified(): ?bool
    {
        return $this->isVerified;
    }
    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }
}
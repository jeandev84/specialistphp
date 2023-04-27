<?php
namespace UML;

class User
{
     const ROLE_ADMIN = 'ROLE_ADMIN';
     const ROLE_USER  = 'ROLE_USER';

     protected ?int $id;
     protected ?string $name;
     protected ?int $age;
     protected bool $isAdmin;
     protected array $roles;


     public function __construct(array $roles)
     {
         $this->roles = $roles;
     }



     /**
      * @param $role
      * @return bool
     */
     public function hasRole($role)
     {
         return in_array($role, $this->roles);
     }


     /**
      * @return string|null
     */
     public function getName(): ?string
     {
        return $this->name;
     }


     /**
      * @param string|null $name
     */
     public function setName(?string $name): void
     {
        $this->name = $name;
     }


     public function doSomething(): void
     {
          echo "FINISHED";
     }

}
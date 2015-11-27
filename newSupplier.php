<?php
class Supplier {
    private $sid;
    private $supplierName;
    private $supplierLandPhoneNumber;
    private $supplierMobilePhoneNumber;
    private $supplierAddress;
    private $supplierEmail;
    private $supplierNIC;
    private $password;
    private $privilage;
     
    function getPassword() {
        return $this->password;
    }
    function getPrivilage() {
        return $this->privilage;
    }
    function setPWD($password) {
        $this->password = $password;
    }
    function setPRV($privilage) {
        $this->privilage = $privilage;
    }
    function getCustomerNIC() {
        return $this->customerNIC;
    }
    function setNIC($customerNIC) {
        $this->customerNIC = $customerNIC;
    }
    function getCid() {
        return $this->cid;
    }
    function getName() {
        return $this->customerName;
    }
    function getCustomerLandPhoneNumber() {
        return $this->customerLandPhoneNumber;
    }
    function getCustomerMobilePhoneNumber() {
        return $this->customerMobilePhoneNumber;
    }
    function getCustomerAddress() {
        return $this->customerAddress;
    }
    function getCustomerEmail() {
        return $this->customerEmail;
    }
    function setCid($cid) {
        $this->cid = $cid;
    }
    function setName($customerName) {
        $this->customerName = $customerName;
    }
    function setLPN($customerLandPhoneNumber) {
        $this->customerLandPhoneNumber = $customerLandPhoneNumber;
    }
    function setMPN($customerMobilePhoneNumber) {
        $this->customerMobilePhoneNumber = $customerMobilePhoneNumber;
    }
    function setADR($customerAddress) {
        $this->customerAddress = $customerAddress;
    }
    function setEmail($customerEmail) {
        $this->customerEmail = $customerEmail;
    }
}



?>

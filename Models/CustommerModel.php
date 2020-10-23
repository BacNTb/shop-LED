<?php
namespace Mvc\Models;

use Mvc\Core\Model;

class CustommerModel extends Model
{
    protected $id;
    protected $led_id;
    protected $count;
    protected $price;
    protected $name;
    protected $address;
    protected $tell;
    protected $create_at;
    protected $update_at;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

        /**
     * Get the value of led_id
     */ 
    public function getLed_id()
    {
        return $this->led_id;
    }

    /**
     * Set the value of led_id
     *
     * @return  self
     */ 
    public function setLed_id($led_id)
    {
        $this->led_id = $led_id;

        return $this;
    }

    /**
     * Get the value of count
     */ 
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set the value of count
     *
     * @return  self
     */ 
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of tell
     */ 
    public function getTell()
    {
        return $this->tell;
    }

    /**
     * Set the value of tell
     *
     * @return  self
     */ 
    public function setTell($tell)
    {
        $this->tell = $tell;

        return $this;
    }

    /**
     * Get the value of create_at
     */ 
    public function getCreate_at()
    {
        return $this->create_at;
    }

    /**
     * Set the value of create_at
     *
     * @return  self
     */ 
    public function setCreate_at($create_at)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $this->create_at = date("Y-m-d h:i:s");

        return $this;
    }

    /**
     * Get the value of update_at
     */ 
    public function getUpdate_at()
    {
        return $this->update_at;
    }

    /**
     * Set the value of update_at
     *
     * @return  self
     */ 
    public function setUpdate_at($update_at)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $this->update_at = date("Y-m-d h:i:s");

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}

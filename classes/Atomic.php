<?php

namespace PHPCuba;

class Atomic
{

  private $value = null;

  /**
   * Atomic constructor.
   *
   * @param null $value
   */
  public function __construct($value = null)
  {
    $this->set($value);
  }

  /**
   * Setter
   *
   * @throws Exception
   * @param $value
   */
  public function set($value)
  {
    if (!is_scalar($value))
    {
      throw new Exception("PHPCuba\Atomic: Value is not scalar");
    }

    $this->value = $value;
  }

  /**
   * Getter
   *
   *
   * @return mixed
   */
  public function get()
  {
    return $this->value;
  }

  /**
   * Reference
   *
   * @return mixed
   */
  public function &reference()
  {
    return $this->value;
  }
}
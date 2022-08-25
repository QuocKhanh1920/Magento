<?php
namespace Magento2\HelloWorld\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                = 'id';
    const HEIGHT            = 'height';
    const WEIGHT            = 'weight';
    const PRODUCT_PRICE     = 'product_price';
    /**#@-*/


    /**
     * Get Height
     *
     * @return string|null
     */
    public function getHeight();

    /**
     * Get Weight
     *
     * @return string|null
     */
    public function getWeight();

    /**
     * Get Product Price
     *
     * @return string|null
     */
    public function getProductPrice();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Height
     *
     * @param string $height
     * @return $this
     */
    public function setHeight($height);

    /**
     * Set Weight
     *
     * @param string $weight
     * @return $this
     */
    public function setWeight($weight);

    /**
     * Set Product Price
     *
     * @param int $productPrice
     * @return $this
     */
    public function setProductPrice($productPrice);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}
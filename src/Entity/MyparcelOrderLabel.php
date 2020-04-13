<?php

namespace Gett\MyParcel\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class MyparcelOrderLabel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer")
     */
    protected $id_order;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    protected $status;

    /**
     * @var int
     *
     * @ORM\Column(name="new_order_state", type="integer")
     */
    protected $new_order_state;

    /**
     * @var int
     *
     * @ORM\Column(name="barcode", type="integer")
     */
    protected $barcode;

    /**
     * @var string
     *
     * @ORM\Column(name="track_link", type="string", length=255)
     */
    protected $track_link;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_url", type="string", length=255)
     */
    protected $payment_url;
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id_order_label", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): MyparcelOrderLabel
    {
        $this->id = $id;

        return $this;
    }

    public function getIdOrder(): int
    {
        return $this->id_order;
    }

    public function setIdOrder(int $id_order): MyparcelOrderLabel
    {
        $this->id_order = $id_order;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): MyparcelOrderLabel
    {
        $this->status = $status;

        return $this;
    }

    public function getNewOrderState(): int
    {
        return $this->new_order_state;
    }

    public function setNewOrderState(int $new_order_state): MyparcelOrderLabel
    {
        $this->new_order_state = $new_order_state;

        return $this;
    }

    public function getBarcode(): int
    {
        return $this->barcode;
    }

    public function setBarcode(int $barcode): MyparcelOrderLabel
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getTrackLink(): string
    {
        return $this->track_link;
    }

    public function setTrackLink(string $track_link): MyparcelOrderLabel
    {
        $this->track_link = $track_link;

        return $this;
    }

    public function getPaymentUrl(): string
    {
        return $this->payment_url;
    }

    public function setPaymentUrl(string $payment_url): MyparcelOrderLabel
    {
        $this->payment_url = $payment_url;

        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}

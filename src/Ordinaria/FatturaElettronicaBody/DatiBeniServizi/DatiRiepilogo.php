<?php

namespace DevCode\FatturaElettronica\Ordinaria\FatturaElettronicaBody\DatiBeniServizi;

use DevCode\FatturaElettronica\ElementoFattura;
use DevCode\FatturaElettronica\Fields\Decimal;

class DatiRiepilogo extends ElementoFattura
{
    public string $EsigibilitaIVA = 'I';

    public ?string $RiferimentoNormativo;

    protected Decimal $AliquotaIVA;

    protected ?string $Natura;

    protected Decimal $SpeseAccessorie;

    protected Decimal $Arrotondamento;

    protected Decimal $ImponibileImporto;

    protected Decimal $Imposta;

    public function __construct()
    {
        parent::__construct();

        $this->AliquotaIVA = new Decimal(2);
        $this->SpeseAccessorie = new Decimal(2);
        $this->Arrotondamento = new Decimal(2);
        $this->ImponibileImporto = new Decimal(2);
        $this->Imposta = new Decimal(2);
    }

    public static function build(
        ?float $AliquotaIVA = null,
        ?string $Natura = null,
        ?float $SpeseAccessorie = null,
        ?float $Arrotondamento = null,
        ?float $ImponibileImporto = null,
        ?float $Imposta = null,
        ?string $EsigibilitaIVA = null,
        ?string $RiferimentoNormativo = null
    ) {
        $element = new static();

        $element->AliquotaIVA = ($AliquotaIVA);
        $element->SpeseAccessorie = ($SpeseAccessorie);
        $element->Arrotondamento = ($Arrotondamento);
        $element->ImponibileImporto = ($ImponibileImporto);
        $element->Imposta = ($Imposta);

        $element->Natura = $Natura;
        $element->EsigibilitaIVA = $EsigibilitaIVA ?: 'I';
        $element->RiferimentoNormativo = $RiferimentoNormativo;

        return $element;
    }

    public function getAliquotaIVA(): ?float
    {
        return $this->AliquotaIVA->get();
    }

    public function setAliquotaIVA(?float $AliquotaIVA): DatiRiepilogo
    {
        $this->AliquotaIVA->set($AliquotaIVA);

        return $this;
    }

    public function getNatura(): ?string
    {
        return $this->Natura;
    }

    public function setNatura(?string $Natura): DatiRiepilogo
    {
        $this->Natura = $Natura;

        return $this;
    }

    public function getSpeseAccessorie(): ?float
    {
        return $this->SpeseAccessorie->get();
    }

    public function setSpeseAccessorie(?float $SpeseAccessorie): DatiRiepilogo
    {
        $this->SpeseAccessorie->set($SpeseAccessorie);

        return $this;
    }

    public function getArrotondamento(): ?float
    {
        return $this->Arrotondamento->get();
    }

    public function setArrotondamento(?float $Arrotondamento): DatiRiepilogo
    {
        $this->Arrotondamento->set($Arrotondamento);

        return $this;
    }

    public function getImponibileImporto(): ?float
    {
        return $this->ImponibileImporto->get();
    }

    public function setImponibileImporto(?float $ImponibileImporto): DatiRiepilogo
    {
        $this->ImponibileImporto->set($ImponibileImporto);

        return $this;
    }

    public function getImposta(): ?float
    {
        return $this->Imposta->get();
    }

    public function setImposta(?float $Imposta): DatiRiepilogo
    {
        $this->Imposta->set($Imposta);

        return $this;
    }

    public function getEsigibilitaIVA(): string
    {
        return $this->EsigibilitaIVA;
    }

    public function setEsigibilitaIVA(string $EsigibilitaIVA): DatiRiepilogo
    {
        $this->EsigibilitaIVA = $EsigibilitaIVA;

        return $this;
    }

    public function getRiferimentoNormativo(): ?string
    {
        return $this->RiferimentoNormativo;
    }

    public function setRiferimentoNormativo(?string $RiferimentoNormativo): DatiRiepilogo
    {
        $this->RiferimentoNormativo = $RiferimentoNormativo;

        return $this;
    }
}

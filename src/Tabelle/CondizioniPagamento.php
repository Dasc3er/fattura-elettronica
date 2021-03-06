<?php

namespace DevCode\FatturaElettronica\Tabelle;

/**
 * Tabella contenente le informazioni per i campi di tipo CondizioniPagamento.
 */
class CondizioniPagamento extends Tabella
{
    const Rate = 'TP01';
    const Completo = 'TP02';
    const Anticipo = 'TP03';

    /**
     * {@inheritdoc}
     */
    public static function getCodifiche(): iterable
    {
        return [
           'TP01' => 'Pagamento a rate',
           'TP02' => 'Pagamento completo',
           'TP03' => 'Anticipo',
        ];
    }
}

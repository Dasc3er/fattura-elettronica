<?php

namespace DevCode\FatturaElettronica\Tabelle;

/**
 * Tabella contenente le informazioni per i campi di tipo Natura.
 */
class Natura extends Tabella
{
    const EscluseArt15 = 'N1';
    const NonSoggette = 'N2';
    const NonImponibili = 'N3';
    const Esenti = 'N4';
    const RegimeDelMargine = 'N5';
    const InversioneContabile = 'N6';
    const IvaAssoltaUe = 'N7';

    /**
     * {@inheritdoc}
     */
    public static function getCodifiche(): iterable
    {
        return [
            'N1' => 'Escluse ex art. 15',
            'N2' => 'Non soggette',
            'N2.1' => 'Non soggette ad IVA ai sensi degli artt. Da 7 a 7-septies del DPR 633/72',
            'N2.2' => 'Non soggette - altri casi',
            'N3' => 'Non imponibili',
            'N3.1' => 'Non imponibili - esportazioni',
            'N3.2' => 'Non imponibili - cessioni intracomunitarie',
            'N3.3' => 'Non imponibili - cessioni verso San Marino',
            'N3.4' => 'Non imponibili - operazioni assimilate alle cessioni all\'esportazione',
            'N3.5' => 'Non imponibili - a seguito di dichiarazioni d\'intento',
            'N3.6' => 'Non imponibili - altre operazioni che non concorrono alla formazione del plafond',
            'N4' => 'Esenti',
            'N5' => 'Regime del margine / IVA non esposta in fattura',
            'N6' => 'Unversione contabile (per le operazioni in reverse charge ovvero nei casi di autofatturazione per
        acquisti extra UE di servizi ovvero per importazioni di beni nei soli casi previsti)',
            'N6.1' => 'Inversione contabile - cessione di rottami e altri materiali di recupero',
            'N6.2' => 'Inversione contabile - cessione di oro e argento pure',
            'N6.3' => 'Inversione contabile - subappalto nel settore edile',
            'N6.4' => 'Inversione contabile - cessione di fabbricati',
            'N6.5' => 'Inversione contabile - cessione di telefoni cellulari',
            'N6.6' => 'Inversione contabile - cessione di prodotti elettronici',
            'N6.7' => 'Inversione contabile - prestazioni comparto edile e settori connessi',
            'N6.8' => 'Inversione contabile - operazioni settore energetico',
            'N6.9' => 'Inversione contabile - altri casi',
            'N7' => 'IVA assolta in altro stato UE (vendite a distanza ex art. 40 c. 3 e 4 e art.
        41 c. 1 lett. b,  DL 331/93; prestazione di servizi di telecomunicazioni, tele-radiodiffusione
        ed elettronici ex art. 7-sexies lett. f, g, art. 74-sexies DPR 633/72)',
        ];
    }
}

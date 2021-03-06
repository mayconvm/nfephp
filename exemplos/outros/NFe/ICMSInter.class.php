<?php
/**
 * Este arquivo é parte do projeto NFePHP - Nota Fiscal eletrônica em PHP.
 *
 * Este programa é um software livre: você pode redistribuir e/ou modificá-lo
 * sob os termos da Licença Pública Geral GNU como é publicada pela Fundação 
 * para o Software Livre, na versão 3 da licença, ou qualquer versão posterior.
 *
 * Este programa é distribuído na esperança que será útil, mas SEM NENHUMA
 * GARANTIA; sem mesmo a garantia explícita do VALOR COMERCIAL ou ADEQUAÇÃO PARA
 * UM PROPÓSITO EM PARTICULAR, veja a Licença Pública Geral GNU para mais
 * detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Publica GNU junto com este
 * programa. Caso contrário consulte <http://www.fsfla.org/svnwiki/trad/GPLv3>.
 *
 * @package   NFePHP
 * @name      ICMSInter
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @copyright 2009 &copy; NFePHP
 * @link      http://www.nfephp.org/
 * @author    {@link http://www.walkeralencar.com Walker de Alencar} <contato@walkeralencar.com>
 */

/**
 * ICMSInter
 * Nível 5 :: L114
 *
 * @author  Djalma Fadel Junior <dfadel@ferasoft.com.br>
 */
class NFe_ICMSInter {
    var $vBCICMSSTDest; // L115 - BC do ICMS ST da UF de destino
    var $vICMSSTDest;   // L116 - valor do ICMS ST da UF de destino

    function __construct() {
    }

    function get_xml($dom) {
        $L114 = $dom->appendChild($dom->createElement('ICMSInter'));
        $L115 = $L114->appendChild($dom->createElement('vBCICMSSTDest', $this->vBCICMSSTDest));
        $L116 = $L114->appendChild($dom->createElement('vICMSSTDest',   $this->vICMSSTDest));
        return $L114;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: thomasm
 * Date: 17.09.2015
 * Time: 09:06
 */

namespace Metaregistrar\EPP;


class atEppCreateDomainRequest extends eppCreateDomainRequest
{
    use atEppCommandTrait;

    protected $atEppExtensionChain = null;

    function __construct($createinfo,atEppExtensionChain $atEppExtensionChain=null) {
        $this->atEppExtensionChain = $atEppExtensionChain;
        parent::__construct($createinfo);
    }


    public function setDomain(eppDomain $domain) {
        parent::setDomain($domain);
        $this->setAtExtensions();
    }


}
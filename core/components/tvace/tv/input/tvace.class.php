<?php

class modTemplateVarInputRendertvAce extends modTemplateVarInputRender
{
    public function getTemplate()
    {
        $corePath = $this->modx->getOption('core_path') . 'components/tvace/';
        return $corePath . 'tv/input/tpl/tv.tvace.input.tpl';
    }

    public function process($value,array $params = array()) {}
}

return 'modTemplateVarInputRendertvAce';

<?php

namespace qcth\alipay\plug;

//同步通知或异步通知
use qcth\alipay\plug_trait\ResultCheckTrait;

class AlipayResult{
    use ResultCheckTrait;


    public function check($data){
        return $this->result_check($data);
    }

}
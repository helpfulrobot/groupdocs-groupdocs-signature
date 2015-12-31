<?php

class groupdocsSignature_Result extends ViewableData
{
    protected $width = false;
    protected $height = false;
    protected $guid = false;

    
    public function __construct($width, $height, $guid)
    {
        $this->width = $width;
        $this->height = $height;
        $this->guid = $guid;
        parent::__construct();
    }
    
    public function forTemplate()
    {
        return "<iframe src='https://apps.groupdocs.com/signature2/forms/SignEmbed/" . $this->guid . "?&referer=silverstripe/1.0.0' frameborder='0' width='" . $this->width . "' height='" . $this->height ."'></iframe>";
    }
}

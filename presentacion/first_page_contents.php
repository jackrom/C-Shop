<?php
class FirstPageContents
{
  public $mLinkToAdmin;
  public $mSiteUrl;
  public $mSiteUrlRoot;

  public function __construct()
  {
    $this->mLinkToAdmin = Link::ToAdmin();
    
    $this->mSiteUrl = Link::Build('', 'https');
    
    $this->mSiteUrlRoot = Link::Build('../');
  }
}
?>

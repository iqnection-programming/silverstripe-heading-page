<?php
// The purpose of this page is simply to redirect to the first
//	child page, or the home page if there's none

namespace IQnection\HeadingPage;

class HeadingPageController extends \PageController
{
	private static $allowed_actions = array(
		"index"
	);

	public function index()
	{
        if ( ($child_page = $this->Children()->First()) && (!$this->getRequest()->requestVar('CMSPreview')) )
        {
            return $this->redirect($child_page->Link());
        }
		return $this;
	}
}



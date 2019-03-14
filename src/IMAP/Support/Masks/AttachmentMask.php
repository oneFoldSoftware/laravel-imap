<?php
/*
* File: AttachmentMask.php
* Category: Mask
* Author: M.Goldenbaum
* Created: 14.03.19 20:49
* Updated: -
*
* Description:
*  -
*/

namespace Webklex\IMAP\Support\Masks;

use Webklex\IMAP\Attachment;

/**
 * Class AttachmentMask
 *
 * @package Webklex\IMAP\Support\Masks
 */
class AttachmentMask extends Mask {

    /** @var Attachment $parent */
    protected $parent;

    /**
     * Get the attachment content base64 encoded
     *
     * @return string|null
     */
    public function getContentBase64Encoded() {
        return base64_encode($this->parent->content);
    }

    /**
     * Get an base64 image src string
     *
     * @return string|null
     */
    public function getImageSrc() {
        return 'data:'.$this->parent->content_type.';base64,'.$this->getContentBase64Encoded();
    }

    /**
     * Alias method for better code reading
     *
     * @return Attachment
     */
    public function getAttachment(){
        return $this->parent;
    }
}
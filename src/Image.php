<?php

// ========================================================================= //
// SINEVIA PUBLIC                                        http://sinevia.com  //
// ------------------------------------------------------------------------- //
// COPYRIGHT (c) 2018 Sinevia Ltd                        All rights resrved! //
// ------------------------------------------------------------------------- //
// LICENCE: All information contained herein is, and remains, property of    //
// Sinevia Ltd at all times.  Any intellectual and technical concepts        //
// are proprietary to Sinevia Ltd and may be covered by existing patents,    //
// patents in process, and are protected by trade secret or copyright law.   //
// Dissemination or reproduction of this information is strictly forbidden   //
// unless prior written permission is obtained from Sinevia Ltd per domain.  //
//===========================================================================//

namespace Sinevia\Html;

//============================= START OF CLASS ==============================//
// CLASS: Image                                                            //
//===========================================================================//
/**
 * Creates an HTML image widget
 * <code>
 * // Creating a new Image
 * $image = new Image();
 *   $image->url(simplest()->root_url."/images/beth.gif");
 *   $image->alt("Image of Beth");
 *   $image->width(200);
 *
 * // The same as above using the shortcut function and method chaining
 * $image = (new Image)->url(simplest()->root_url."/images/beth.gif")alt("Image of Beth")->width(200);
 * </code>
 */
class Image extends Element {

    //========================= START OF METHOD ===========================//
    //  CONSTRUCTOR: __construct                                           //
    //=====================================================================//
    /**
     * The constructor of this Image.
     * @construct
     */
    function __construct($url = "#", $width = null, $height = null) {
        parent::__construct();
        $this->setUrl($url);
        $this->height = $height;
        $this->width = $width;
        if ($width != null) {
            $this->setCss('width', $width);
        }
        if ($height != null) {
            $this->setCss('height', $height);
        }
        $this->setCss("vertical-align", "middle");
        $this->setCss("border", "0px");
        $this->setAlt(basename($url));
        $this->setCss("margin", "0px");
        $this->setCss("padding", "0px");
    }

    /** Retrieves the URL of this Image.
     * @return mixed The text as String (null, if not set) or an instance of this Label
     * @access public
     */
    function getUrl() {
        return $this->getAttribute("src");
    }

    /** Sets the URL of this Image.
     * @return mixed The text as String (null, if not set) or an instance of this Label
     * @access public
     */
    function setUrl($url) {
        if (is_string($url) == false) {
            trigger_error('ERROR: In class <b>' . get_class($this) . '</b> in method <b>url($url)</b>: Parameter <b>$url</b> MUST BE of type String - <b style="color:red">' . gettype($url) . '</b> given!', E_USER_ERROR);
        }
        $this->setAttribute("src", $url);
        return $this;
    }

    /** Retrieves the alternative text for this Image.
     * @return mixed The text as String (null, if not set) or an instance of this Image
     * @access public
     */
    function getAlt($alt = null) {
        return $this->getAttribute("alt");
    }

    /** Sets or retrieves the alternative text for this Image.
     * @return mixed The text as String (null, if not set) or an instance of this Image
     * @access public
     */
    function setAlt($alt = null) {
        if (is_string($alt) == false) {
            trigger_error('ERROR: In class <b>' . get_class($this) . '</b> in method <b>alt($alt)</b>: Parameter <b>$alt</b> MUST BE of type String - <b style="color:red">' . gettype($alt) . '</b> given!', E_USER_ERROR);
        }
        $this->setAttribute("alt", $alt);
        return $this;
    }

    /** Sets or retrieves the title for this Image.
     * @return mixed The text as String (null, if not set) or an instance of this Image
     * @access public
     */
    function getTitle($title = null) {
        return $this->getAttribute("title");
    }

    /** Sets or retrieves the title for this Image.
     * @return mixed The text as String (null, if not set) or an instance of this Image
     * @access public
     */
    function setTitle($title = null) {
        if (is_string($title) == false) {
            trigger_error('ERROR: In class <b>' . get_class($this) . '</b> in method <b>title($title)</b>: Parameter <b>$title</b> MUST BE of type String - <b style="color:red">' . gettype($title) . '</b> given!', E_USER_ERROR);
        }
        $this->setAttribute("title", $title);
        return $this;
    }

    /**
     * Returns the HTML representation of this Image with its children.
     * @param compressed compresses the HTML, removing the new lines and indent
     * @param level the level of this widget
     * @return String html string
     */
    function toHtml($compressed = true, $level = 0) {
        if ($compressed == false) {
            $nl = "\n";
            $tab = "    ";
            $indent = str_pad("", ($level * 4));
        } else {
            $nl = "";
            $tab = "";
            $indent = "";
        }
        $html = $indent . '<img' . $this->attributesToHtml() . $this->cssToHtml() . ' />';
        return $html;
    }

    //=====================================================================//
    //  METHOD: to_html                                                    //
    //========================== END OF METHOD ============================//

    /**
     * Returns the XHTML representation of this Image with its children.
     * @param compressed compresses the XHTML, removing the new lines and indent
     * @param level the level of this widget
     * @return String html string
     */
    function toXhtml($compressed = true, $level = 0) {
        if ($compressed == false) {
            $nl = "\n";
            $tab = "    ";
            $indent = str_pad("", ($level * 4));
        } else {
            $nl = "";
            $tab = "";
            $indent = "";
        }
        $html = $indent . '<img' . $this->attributesToHtml() . $this->cssToHtml() . ' />';
        return $html;
    }

    //=====================================================================//
    //  METHOD: to_xhtml                                                   //
    //========================== END OF METHOD ============================//
}

//===========================================================================//
// CLASS: Image                                                              //
//============================== END OF CLASS ===============================//

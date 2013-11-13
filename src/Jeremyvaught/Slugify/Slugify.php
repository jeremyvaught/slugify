<?php namespace Jeremyvaught\Slugify;

class Slugify {

    /**
     * Return a URLable slug from a string
     * 
     * @param  string $input
     * @return string       
     */
    public function slug($input){
        
        // My regular expression kung foo is off-white belt quality
        // others tried are "/[^a-zA-Z0-9]+/";//'#^[a-z0-9\s]+$#i';
        // This one gets the job done.
        $pattern = "#[^a-z0-9\s-]#i";
        $new_slug = $input;
        $new_slug = str_replace(" ", "-", $new_slug);
        $new_slug = strtolower($new_slug);
        $new_slug = preg_replace($pattern, "", $new_slug);

        return $new_slug;
    }
    
}

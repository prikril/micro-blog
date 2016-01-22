<?php declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 23.10.2015
 * Time: 14:43
 */
class Blog
{
    private $name;
    private $artikel;
    private $eigentuemer;
    private $autoren;

    public function __construct(String $name, Benutzer $eigentuemer) {
        $this->name = $name;
        $this->articles = new ArtikelCollection();
        $this->eigentuemer = $eigentuemer;
        $this->autoren = new BenutzerCollection();
    }

    public function eigentuemer() {
        return $this->eigentuemer;
    }

    public function artikelVeroeffentlichen(Benutzer $benutzer, blabla $artikel ) {
        if ($this->benutzerIstEigentuemer($benutzer) || $this->benutzer ) {
            $this->artikel->add($artikel);
        } else {
            // entspr. Exception schmeißen
            echo("Benuzer darf nicht veröffentlichen.");
        }
    }

    public function benutzerIstEigentuemer(Benutzer $benutzer) {
        return $this->eigentuemer->equals($benutzer);
    }

    private function  benutzerIstAutor(Benutzer $benutzer) {
        return $this->autoren->contains($benutzer);
    }

}
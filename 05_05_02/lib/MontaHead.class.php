<?php

class MontaHead {

    function __toString() {
        $head = new Head("Site");
        $head->addProp(new Meta("viewport", "width=device-width, initial-scale=1"));
        $head->addProp(new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous"));

        return "" . $head;
    }
}
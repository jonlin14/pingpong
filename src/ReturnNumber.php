<?php

    class ReturnNumber
    {
        public $limit2;

        function __construct($limit3) {
            $this->limit2=$limit3;
        }

        function setLimit($newlimit) {
            $this->limit2=$newlimit;
        }

        function getLimit() {
            return $this->limit2;
        }
    }

    ?>

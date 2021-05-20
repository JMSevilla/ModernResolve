<?php

interface TokenUpdaterInterface {
    public function create($table, $request);
    public function patchByEmail($table, $request);
}
<?php

interface CodexInterface {
    public function codex_store($table, $data);
    public function codex_add_mapping($maxclasscodeid, $currentuserID);
    public function current_email_getter($data, $maxclasscodeid);
}
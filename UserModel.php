<?php

namespace phyohtetaung\phpmvc;

use phyohtetaung\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}

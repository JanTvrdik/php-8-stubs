<?php 

/** @param LDAP\Connection|array $ldap */
function ldap_list($ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = -1, int $timelimit = -1, int $deref = LDAP_DEREF_NEVER, ?array $controls = null)
{
}
<?php

namespace App\Enums;

final class UserRole
{
    const Member = 0;
    const Admin = 1;
    const Editor = 2;

    const RolesArr = [
        self::Member => "Member",
        self::Admin => "Admin",
        self::Editor => "Editor",
    ];
}
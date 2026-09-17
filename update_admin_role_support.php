<?php
// ملف: update_admin_role_support.php
// تعديل عمود role في جدول admins لإضافة 'support' و 'marketing' + صلاحيات التبويبات

include("config.php");
include("helpers.php");

ensure_admin_permissions_schema($conn);

echo "✅ تم تحديث عمود role لدعم: super_admin, admin, support, marketing<br>";
echo "✅ وتم التأكد من وجود عمود allowed_pages لصلاحيات التبويبات";
?>

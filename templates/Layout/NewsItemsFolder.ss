<h1>$Title</h1>
<ul>
<% control AllChildren %>
<li>
<h2>$Title</h2>
<% if MainPhoto %>
$MainPhoto.SetWidth(100)
<% end_if %>
$Content.Summary(50)
</li>
<% end_control %>
</ul>
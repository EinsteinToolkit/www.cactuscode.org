---
layout: default
title: Thorn Documentation
---

{% include base.html %}
{% assign thorndocs = site.collections | where:"label","thorndocs" %}

{% for f in thorndocs  %}
<ul>
  {% assign files = f.files | sort:"name" %}
  {% for g in files %}
    {% assign arrthorn = g.name | split: "-" %}
    {% assign arrangement = arrthorn[0] %}
    {% assign thorn = arrthorn[1] | remove: ".pdf" %}
    <li><a href="{{base}}/thorndocs/{{g.name}}">{{arrangement}}/{{thorn}}</a></li>
  {% endfor %}
</ul>
{% endfor %}

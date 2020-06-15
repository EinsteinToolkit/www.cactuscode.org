---
layout: default
title: Thorn Arrangement Documentation
---

{% assign arrangementdocs = site.collections | where:"label","arrangementdocs" %}

{% for f in arrangementdocs  %}
<ul>
  {% assign files = f.files | sort:"name" %}
  {% for g in files %}
    {% assign arrangement = g.name | remove: ".pdf" %}
    <li><a href="/arrangementdocs/{{g.name}}">{{arrangement}}</a></li>
    {% if g.extname == 'pdf' %}
    {% endif %}
  {% endfor %}
</ul>
{% endfor %}

---
layout: default
title: Site Map
---
{% assign olddepth = 0 %}
{% assign sorted_pages = site.pages | sort: "url" %}
{% for page in sorted_pages %}
{% unless page.sitemap_exclude %} 
{% assign depth = page.url | append: 'index.html' | split: '/' | size | minus: 1 %}
{% if depth > olddepth %} <ul> {% elsif depth < olddepth %} </ul> {% endif %}
<li><a href="{{base}}{{page.url}}">{{page.title}}</a></li>
{% assign olddepth = depth %}
{% endunless %} {% endfor %}
{% for d in (1..depth) %}</ul>{% endfor %}

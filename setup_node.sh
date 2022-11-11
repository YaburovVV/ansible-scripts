#!/usr/bin/env bash
ansible-playbook -i ansible/inventory.yml ansible/nginx-playbook.yml --limit nginx_node

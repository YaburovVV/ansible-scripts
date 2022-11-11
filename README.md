# ansible-scripts
TODO: Install nginx from some central to all nodes.
1. To install nginx to nodes from my PC 🟢
2. Collect scripts and configs to a git repository 🟢
3. Pull scripts from central 
4. Run ansible from central


### To install nginx + php-frm
```shell
ansible-playbook -i ansible/inventory.yml \
  ansible/nginx-playbook.yml
```
or
```shell
/home/vladimir/code/ansible-scripts/setup_node.sh
```


### To delpoy a site without nginx installing  
```shell
ansible-playbook -i ansible/inventory.yml \
  ansible/nginx-playbook.yml --tags 'deploy' 
```

### To install jenkins  
```shell
ansible-playbook -i inventory.yml \
  jenkins-playbook.yml
```

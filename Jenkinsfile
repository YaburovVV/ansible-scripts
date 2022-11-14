pipeline {
  agent any
  stages {
    stage("execute Ansible") {
      steps {
        ansiblePlaybook inventory: 'ansible/inventory.yml', playbook: 'ansible/nginx-playbook.yml'
      }
    }
  }
}

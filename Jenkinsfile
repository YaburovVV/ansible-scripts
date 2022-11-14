pipeline {
  agent any
  stages {
    stage("execute Ansible") {
      steps {
        ansiblePlaybook disableHostKeyChecking: true, installation: 'Ansible', inventory: 'ansible/inventory.yml', playbook: 'ansible/nginx-playbook.yml'
      }
    }
  }
}

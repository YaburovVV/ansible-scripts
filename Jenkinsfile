pipeline {
  agent any
  stages {
    stage("execute Ansible") {
      steps {
        dir('ansible') {
          ansiblePlaybook inventory: 'inventory.yml', playbook: 'nginx-playbook.yml'
        }
      }
    }
  }
}

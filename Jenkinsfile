pipeline {
  agent any
  stages {
    stage("execute Ansible") {
      steps {
        dir('ansible') {
          ansiblePlaybook credentialsId: 'ssh_jen2', inventory: 'inventory.yml', playbook: 'nginx-playbook.yml'
        }
      }
    }
  }
}

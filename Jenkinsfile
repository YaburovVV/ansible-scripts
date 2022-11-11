pipeline {
  agent any
  stages {
    stage("execute Ansible") {
      steps {
        ansiblePlaybook credentialsId: 'github_ssh', disableHostKeyChecking: true, installation: 'Ansible', inventory: 'ansible/inventory.yml', playbook: 'ansible/nginx-playbook.yml'
      }
    }
  }
}

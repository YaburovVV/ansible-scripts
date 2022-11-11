pipeline {
  agent any
  stages {
    stage ("SCM checkout") {
      steps {
        git "https://github.com/YaburovVV/ansible-scripts.git"
      }
    }
    stage("execute Ansible") {
      steps {
        ansiblePlaybook credentialsId: 'github_ssh', disableHostKeyChecking: true, installation: 'Ansible', inventory: 'ansible/inventory.yml', playbook: 'ansible/nginx-playbook.yml'
      }
    }
  }
}

pipeline {
    agent any

    environment {
        DOCKERHUB_CREDENTIALS = credentials('cyfdoc')
    }

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/skcyfrif/january2.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    sh 'docker build -t cyfdoc/app-name .'
                }
            }
        }

        stage('Push Docker Image to DockerHub') {
            steps {
                script {
                    sh 'echo "$DOCKERHUB_CREDENTIALS_PSW" | docker login -u "$DOCKERHUB_CREDENTIALS_USR" --password-stdin'
                    sh 'docker push cyfdoc/app-name'
                }
            }
        }

        stage('Deploy Application') {
            steps {
                script {
                    sh 'docker-compose down'
                    sh 'docker-compose up -d'
                }
            }
        }
    }
}

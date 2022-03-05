pipeline{
  agent {label 'main'}
  stages{
    stage('Cleaning WS'){
      steps{
        cleanWs()
      }
    }
    stage('repo pulling'){
      steps{
        git branch: 'main', url: 'https://github.com/Bittu-514/Nexus.git'
        sh "ls"
      }
    }
    stage('AWSCLI code exucution'){
      steps{
        sh "aws lambda create-function --function-name Nexus --runtime python3.9 --timeout 840 --zip-file fileb://Nexus.zip --handler Nexus.lambda_handler  --role arn:aws:iam::462173630261:role/full_access_role --region us-east-2"
      }
    }
    stage('Cleaning WS1'){
      steps{
        cleanWs()
      }
    }
  }
}

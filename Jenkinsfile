def infra

node(){
    properties([
            buildDiscarder(
                    logRotator(
                            daysToKeepStr: "28",
                            numToKeepStr: "500")
            )
    ])

  checkout scm

  infra = load '/var/lib/jenkins/workspace/_feature_6365-unattended-choices/src/Infra.groovy'
  //infra = load '/var/lib/jenkins/workspace/itop-test-infra_master/src/Infra.groovy'

}


infra.call()


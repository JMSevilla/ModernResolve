

const state = {
  app: 'app/',
  helpers: 'Helpers'
}

const requestInbound = {
  create(obj, resolve){
    return $.post(state.app + state.helpers + "/Helpers.php", obj, (response) => {
      responseOutbound.dataResponse(resolve, response)
    })
  }
}

const responseOutbound = {
  dataResponse(resolve, response){
    resolve(response)
  }
}

const handler = {
  async buildData_construct(obj){
    await Promise.all([this.buildData(obj)])
  },
  async buildData(obj){
    const promise = new Promise((resolve) => {
      requestInbound.create(obj, resolve)
    })
    await promise.then(response => {
      console.log(response)
    })
  }
}

export default handler;



const state = {
  app: 'app/',
  helpers: 'Helpers'
}

const requestInbound = {
  create(obj, resolve){
    return $.post(state.app + state.helpers + "/Helpers.php", obj, (response) => {
      responseOutbound.dataResponse(resolve, response)
    })
  },
  userRegistration(obj, resolve){
    return $.post(state.app + state.helpers + "/Helpers.php", obj, (response) => {
      responseOutbound.dataResponse(resolve, response)
    })
  },
  loginUser(obj, resolve) {
    return $.post(state.app + state.helpers + "/LoginHelpers", obj, response => {
      responseOutbound.dataResponse(resolve, response);
    });
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
  },
  async buidData_Registration(obj){
    await Promise.all([this.buildRegistration(obj)])
  },
  async buildRegistration(obj){
    const promise = new Promise((resolve) => {
      requestInbound.userRegistration(obj, resolve);
    })
    await promise.then(response => {
      console.log(response);
    })
  },
  async build_Login(obj) {
    await Promise.all([this.buildLogin(obj)]);
  },
  async buildLogin(obj) {
    const promise = new Promise(resolve => {
      requestInbound.loginUser(obj, resolve);
    });
    await promise.then(response => {
      // console.log(response);
      let hammer = JSON.parse(response);
      if (hammer.type == 'Admin') {
        // console.log('condition ok');

          window.location.href = "http://localhost/modernresolve/homeadmin";

      }
    });
  }
}

export default handler;

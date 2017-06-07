import { MyAppAngularPage } from './app.po';

describe('my-app-angular App', () => {
  let page: MyAppAngularPage;

  beforeEach(() => {
    page = new MyAppAngularPage();
  });

  it('should display welcome message', done => {
    page.navigateTo();
    page.getParagraphText()
      .then(msg => expect(msg).toEqual('Welcome to app!!'))
      .then(done, done.fail);
  });
});

console.clear();
const { useState } = React;
const { createPortal } = ReactDOM;

// Modal Component for creating a Portal
const ModalPortal = React.memo(({ children }) => {
  const modalEle = document.querySelector('.ReactModalPortal');
  if (!modalEle) return null;
  
  return createPortal(
    <div className="ReactModal__Overlay ReactModal__Overlay--after-open">
    
      {children}

    </div>,
    modalEle
  );
});

// HOOK: useModal
const useModal = () => {
  const [ isActive, setIsActive ] = useState(false);
  
  const show = () => setIsActive(true);
  const hide = () => setIsActive(false);
  
  const Modal = ({ children }) => (
    <>
      { isActive && <ModalPortal>{children}</ModalPortal> }
    </>
  );
  
  return {
    show, 
    hide, 
    Modal
  }
}

// MyModal Component
const MyModal = (props) => {
  return (
    <div className="modal-content">
      <div className="modal-header">
        My Modal 
      </div>
      <div className="modal-body">
        <p>This is a modal</p>
      </div>
      <div className="modal-footer">
        <button onClick={props.handleDelete}>
          Delete
        </button>
        &nbsp;
        <button onClick={props.hide}>
          Close
        </button>
      </div>
    </div>
  );
};

// Main App Component
const App = () => {
  const { hide, show, Modal } = useModal();
  const [ buttonClick, setButtonClick ] = useState('');
  
  const delClicked = () => {
    hide();
    setButtonClick('delete clicked')
  }
  
  return (
    <>
        <p><i class="iconcmt-User"></i></p>      
        <span onClick={show}>Đăng nhập</span>
        {buttonClick && <p>{buttonClick}</p>}
      <Modal>
        <MyModal handleDelete={delClicked} hide={hide} />
      </Modal>
    </>
  );
};

// Render App
ReactDOM.render(<App />, document.querySelector(".HeaderPC_login_account"));

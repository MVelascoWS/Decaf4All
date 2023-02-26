using UnityEngine;
using UnityEngine.Events;

public class Selector : MonoBehaviour
{
    public LayerMask storeMask;
    public float rayDistance;
    public Camera playerCamera;
    public UnityEvent OnShowCard;
    public EndpointConector endpointConector;
    private Ray cameraRay;
    private RaycastHit cameraHit;
    private void Update()
    {
        
        if (Input.GetMouseButtonDown(0))
        {
            cameraRay = playerCamera.ScreenPointToRay(Input.mousePosition);
            if (Physics.Raycast(cameraRay, out cameraHit, rayDistance, storeMask))
            {                
                endpointConector.ShowData(cameraHit.transform.parent.GetComponent<StoreID>().id);
                OnShowCard.Invoke();
            }
        }
    }
}
